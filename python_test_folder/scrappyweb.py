import csv
from bs4 import BeautifulSoup
from selenium import webdriver
def get_url(search_term):
    # template = 'https://www.amazon.in/s?k={}&ref=nb_sb_noss_2'
    template = 'https://www.amazon.in/s?k={}&i=electronics&rh=n%3A1389432031%2Cp_89%3AASUS%7CBlackBerry%7CCoolpad%7CGIONEE%7CGeneric%7CGoogle%7CHEEMAX%7CIKALL%7CIntex%7CLava%7CMI%7CMicromax%7CMoto%7CMotorola%7CNillkin%7CNokia%7COnePlus%7COppo%7CPHILIPS%7CRedmi%7CSHIVANSH%7CSamsung%7CSnexian%7CTecno%7CVivo%7CXiaomi%7CXifo%7CZiox%7CZopo%7CiQOO%7Citel%7Crealme&dc&qid=1630870165&rnid=3837712031&ref=sr_nr_p_89_32'
    search_term = search_term.replace(' ', '+')
    url =  template.format(search_term)
    url+= '&page={}'
    return url
def extract_record(item):
    atag = item.h2.a
    description = atag.text.strip()
    url = 'https://www.amazon.in'+ atag.get('href')
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
    result = (description, price, rating, review_count, url)
    return result  
def main(search_term):
    driver =  webdriver.Chrome()
    records = []
    for page in range(1, 92):
        url = get_url(search_term)
        driver.get(url.format(page))
        soup = BeautifulSoup(driver.page_source,'html.parser')
        results = soup.find_all('div', {'data-component-type':'s-search-result'})
        for item in results:
            record = extract_record(item)
            if record:
                records.append(record)
    driver.close()
    with open('results.csv', 'w', newline='', encoding='utf-8') as f:
        writer = csv.writer(f)
        writer.writerow(['Discription', 'Price', 'Rating', 'ReviewCount', 'Url'])
        writer.writerows(records)

main('mobiles')