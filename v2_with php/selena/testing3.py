from selenium import webdriver
from selenium.webdriver.common.keys import Keys

# set up the browser
driver = webdriver.Chrome()
driver.get("http://localhost/s6/signin.php")

# locate the email field and enter the email
email_field = driver.find_element_by_id("email")
email_field.send_keys("chrisdepallan2@gmail.com")

# locate the password field and enter the password
password_field = driver.find_element_by_id("passwd")
password_field.send_keys("1234@Qwe")

# press the Enter key to submit the form
password_field.send_keys(Keys.ENTER)

# locate the Products link and click on it
products_link = driver.find_element_by_link_text("Products")
products_link.click()

# locate the search input field and click on it
search_field = driver.find_element_by_id("search-input")
search_field.click()

# close the browser
driver.quit()
