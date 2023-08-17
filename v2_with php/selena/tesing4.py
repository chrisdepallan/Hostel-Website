from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

# Set up the webdriver
driver = webdriver.Chrome()

# Navigate to the URL
driver.get("http://localhost/s6/home/product_page.php")

# Resize the window
driver.set_window_size(1936, 1096)

# Click on the "Home" link
home_link = driver.find_element(By.LINK_TEXT, "Home")
home_link.click()

# Click on the "Forum" link
forum_link = driver.find_element(By.LINK_TEXT, "Forum")
forum_link.click()

# Click on the "john doe is nice" forum post
forum_post = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CSS_SELECTOR, ".tt-item:nth-child(2) .tt-title")))
forum_post.click()

# Double click on the "john doe is nice" forum post
forum_post = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CSS_SELECTOR, ".tt-item:nth-child(2) .tt-title")))
webdriver.ActionChains(driver).double_click(forum_post).perform()

# Click on the "report" button for the "john doe is nice" forum post
report_button = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CSS_SELECTOR, ".tt-item:nth-child(2) > .tt-col-description .tt-icon")))
report_button.click()

# Close the browser
driver.quit()
