from autoscraper import AutoScraper
scraper = AutoScraper()
import pandas as pd
from bs4 import BeautifulSoup
from selenium import webdriver
from webdriver_manager.opera import OperaDriverManager
driver = webdriver.Opera(executable_path=OperaDriverManager().install())
products =[]
prices =[]
ratings =[]
driver.get("https://www.amazon.in/s?k=mobile&ref=nb_sb_noss")
content = driver.page_sourcev
soup = BeautifulSoup(content)
for a in soup.findAll('div', attrs={'class':'a-section a-spacing-medium'}):
    name=a.find('span', attrs={'class':'a-size-medium'})
    price =a.find('span', attrs={'class':'a-price-whole'})
    rating =a.find('span', attrs={'class':'a-size-base'})
    name = name.text
    price = price.text
    rating = rating.text
    products.append(name)
    prices.append(price)
    ratings.append(rating)
df = pd.DataFrame({'Product Name':products,'Price':prices,'ratings':ratings}) 
print(df)
# df.to_csv('products.csv', index=False, encoding='utf-8')
