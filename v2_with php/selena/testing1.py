from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
driver=webdriver.Chrome()
driver.maximize_window()
driver.get("http://localhost/s6/home.php")
email_field = driver.find_element('id','email')
password_field = driver.find_element('id','passwd')
email_field.send_keys('chrisdepallan@gmail.com')
password_field.send_keys('1234@Qwe')
time.sleep(3)
password_field.send_keys(Keys.RETURN)
time.sleep(3)
driver.find_element("name", "submit").click()
driver.quit()