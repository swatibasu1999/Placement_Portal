from selenium import webdriver 
import selenium
from selenium import webdriver as wb
import pandas as pd
webd = wb.Chrome(r"C:/Users/swati/Downloads/chromedriver_win32 (1)/chromedriver.exe")
webd.get('https://prepinsta.com/tcs-placement-papers/')


# ques_section = webd.find_elements_by_class_name('dash-answerul')
# print(ques_section[0].text)


# df=pd.DataFrame()
df=pd.DataFrame()
ques_section = webd.find_elements_by_class_name('dash-questionrow')
for el in ques_section:
    result = []
    data =[]
    ques = el.find_elements_by_class_name('dash-question')[0].text
    result.append(ques)
    ans = el.find_elements_by_class_name('dash-ls-ans-title')
    for x in range(0,4):
        s = ans[x].text
        result.append(s)
    data.append(result)
    df = df.append(data)
    df.index += 1

no_of_rows = len(df)
list_rows = []
for i in range(1,no_of_rows+1):
    list_rows.append(i)
df.columns = ['Ques','op1','op2','op3','op4']
df.index = list_rows
print(df)
#df.to_csv("C://Users//swati//Documents//data.csv")

    
   


