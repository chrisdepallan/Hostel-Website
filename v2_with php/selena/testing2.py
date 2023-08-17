from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
driver=webdriver.Chrome()
driver.maximize_window()
driver.get("http://localhost/s6/regis.php")
name_field = driver.find_element('id','uname')
phone_field = driver.find_element('id','phno')
email_field = driver.find_element('id','email')
password_field = driver.find_element('id','passwd')
cpassword_field = driver.find_element('id','cpasswd')
name_field.send_keys('Anton Thomas')
phone_field.send_keys('9898989898')
email_field.send_keys('chinnu@gmail.com')
password_field.send_keys('1234@Qwe')
cpassword_field.send_keys('1234@Qwe')
image_field=driver.find_element('xpath', '//*[@id="file"]')
image_field.send_keys(r"C:\Users\chrisdepallan_1\Pictures\1220064.jpg")


time.sleep(3)
password_field.send_keys(Keys.RETURN)
time.sleep(3)
driver.find_element("name", "submit").click()
driver.quit()