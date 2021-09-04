from autoscraper import AutoScraper
scraper = AutoScraper()
import time
import pandas as pd
from bs4 import BeautifulSoup
from selenium import webdriver
from webdriver_manager.opera import OperaDriverManager
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
products =[]
prices =[]
driver = webdriver.Opera(executable_path=OperaDriverManager().install())
def extractdata():
    print("this function is working")
    for a in soup.findAll('div', attrs={'class':'a-section a-spacing-none'}):
        name =a.find('span', attrs={'class':'a-size-medium'})
        price =a.find('span', attrs={'class':'a-price-whole'})
        name = name
        price = price
        # rating = rating.text
        products.append(name)
        prices.append(price)
# ratings =[]
driver.get("https://www.amazon.in/s?k=mobile&ref=nb_sb_noss")
content = driver.page_source
soup = BeautifulSoup(content,'html.parser')
i = 0
while i<=20:
    driver.implicitly_wait(20)
    button = driver.find_element_by_xpath('//*[@id="search"]/div[1]/div[1]/div/span[3]/div[2]/div[26]/span/div/div/ul/li[2]/following-sibling::li[1]/a')
    # button = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.XPATH, '//*[@id="search"]/div[1]/div[1]/div/span[3]/div[2]/div[26]/span/div/div/ul/li[2]/following-sibling::li[1]/a')))
    extractdata()
    i=i+1
    button.click()
    time.sleep(3)
df = pd.DataFrame({'Product Name':products,'Price':prices}) 
print(df)
df.to_csv('products.csv', index=False, encoding='utf-8')
