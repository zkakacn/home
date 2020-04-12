a=input('输入的字符串里面每个字符出现的次数\n')
dic={}
for i in a:
    dic[i]=(a.count(i))
print(dic)
