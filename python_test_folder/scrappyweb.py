import csv
from bs4 import BeautifulSoup
from selenium import webdriver
def get_url(search_term):
    template = 'https://www.amazon.in/s?k={}&ref=nb_sb_noss_2'
    search_term = search_term.replace(' ', '+')
    url =  template.format(search_term)
    url+= '&page={}'
    return url
def extract_record(item, driver):
    atag = item.h2.a
    description = atag.text.strip()
    url = 'https://www.amazon.in'+ atag.get('href')
    driver.get(url.format())
    soup2 = BeautifulSoup(driver.page_source,'html.parser')
    try:
        image1 = soup2.find('img', attrs={'class':'a-dynamic-image'}).get('src')
        asin = soup2.find('img', attrs={'class':'a-dynamic-image'}).get('src')
    except AttributeError:
        return
    try:
        price_parent = item.find('span','a-price')
        price = price_parent.find('span', 'a-offscreen').text
    except AttributeError:
        return
    try:
        rating = item.i.text
        review_count = item.find('span',{'class': 'a-size-base'}).text
    except AttributeError:
        rating = ''
        review_count = ''
    result = (description, price, rating, review_count, url, image1, asin)
    return result
def main(search_term):
    driver =  webdriver.Chrome()
    records = []
    url = get_url(search_term)
    for page in range(1 , 2):
        driver.get(url.format(page))
        soup = BeautifulSoup(driver.page_source,'html.parser')
        results = soup.find_all('div', {'data-component-type':'s-search-result'})
        for item in results:
            record = extract_record(item, driver)
            if record:
                records.append(record)
    driver.close()
    with open('results.csv', 'w', newline='', encoding='utf-8') as f:
        writer = csv.writer(f)
        writer.writerow(['Discription', 'Price', 'Rating', 'ReviewCount', 'Url', 'image', 'ASIN'])
        writer.writerows(records)

main('mobiles')