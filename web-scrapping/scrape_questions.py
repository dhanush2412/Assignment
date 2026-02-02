import requests
from bs4 import BeautifulSoup

page_url = "https://stackoverflow.com/questions/tagged/python"
result = requests.get(page_url)

soup = BeautifulSoup(result.content, "html.parser")
question_tags = soup.find_all("h3")

count = 1
for tag in question_tags:
    link = tag.find("a")
    if link:
        title = link.text.strip()
        print(str(count) + ". " + title)
        count += 1
