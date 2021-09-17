 import pandas as pd
from bs4 import BeautifulSoup
from pandas.core.indexes.base import Index
from selenium import webdriver
import csv
df=pd.read_csv('results.csv', usecols=["Url"]).head(10)
print(df)
def extract_record(soup):
    images = []
    valuebutton = soup.find_all('span', 'a-button-text' )
    asinno = soup.find('table', {'id':'productDetails_detailBullets_sections1'})
    if asinno.tbody.tr.td:
        asin = (asinno.tbody.tr.td).text
        print(asin.strip())
    for button in valuebutton:
        if button.img:
            images.append(button.img['src'])
    for i in range(9):
        if (i <= len(images)) != 'True':
            images.append('Empty')            
    result = (images[0], images[1], images[2], images[3], images[4],images[5],images[6],images[7],images[8],asin.strip())
    return result
def main():
    driver =  webdriver.Chrome()
    records = []
    for index,item in df.iterrows():
        driver.get(item[0])
        soup = BeautifulSoup(driver.page_source,'html.parser')
        record = extract_record(soup)
        if record:
            records.append(record)
        with open('resultimage.csv', 'w', newline='', encoding='utf-8') as f:
            writer = csv.writer(f)
            writer.writerow(['image1', 'image2', 'image3', 'image4', 'image5','image6','image7','image8','image9','Asin'])
            writer.writerows(records)
    driver.close()
    # print(records)
main()