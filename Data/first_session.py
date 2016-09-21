# coding: utf-8
import pandas as pd
import numpy as np
df = pd.read_csv('processed.data')
df.head(3)
type(df)
df.dtypes
df.info()
df = df.dropna()
df.info()
df[df.match('\d.\d.\d')]
df[df.extract('\d.\d.\d')]
df.shape
a = 1.0.1
df[1][5]
df[10]
df['10]
df['10']
df[
"10"
]
a = 1.0
a.count('.')
a='1.0'
a.type()
a.type
a.dtype
a.dtype()
type(a)
a.count('.'0





)
a.count('.')
df.isnull()
df.head(3)
import csv as csv
csv_file_object = csv.reader(open('processed.data','rb')
)
data=[]
for row in csv_file_object
for row in csv_file_object:
    data.append(row)
    
data = np.array(data)
data
np.where(data=='?')
data = np.delete(data, (87), axis=0)
np.where(data=='?')
data = np.delete(data, (165), axis=0)
np.where(data=='?')
data = np.delete(data, (190), axis=0)
data = np.delete(data, (263), axis=0)
data = np.delete(data, (283), axis=0)
np.where(data=='?')
data = np.delete(data, (297), axis=0)
data.shape
np.savetxt('Deleted.csv',data,delimiter=',')
data = data.astype(np.float)
np.savetxt('Deleted.csv',data,delimiter=',')
data2 = data.reshape((-1,14))
df = pd.DataFrame(data2)
df
df.head(3)
df.info()
finaldata=df.values
prediction_file = open("final.csv","wb")
prediction_file_object = csv.writer(prediction_file)
for row in finaldata
for row in finaldata:
    prediction_file_object.writerow(row)
    
prediction_file.close()
from sklearn.ensemble import RandomForestCLassifier
from sklearn.ensemble import RandomForestClassifier
forest=RandomForestClassifier(n_estimators=100)
forest = forest.fit(finaldata(0::,[0,12]),final(0::,13))
forest = forest.fit(finaldata(:,[0,12]),final(:,13))
finaldata
forest = forest.fit(finaldata[:,[0,12]],final[:,13])
forest = forest.fit(finaldata[:,[0,12]],finaldata[:,13])
testdata = array([56,1,3,130,256,1,2,142,1,0.6,2,1,6])
testdata = np.array([56,1,3,130,256,1,2,142,1,0.6,2,1,6])
output = forest.predict(testdata)
forest
forest = forest.fit(finaldata[:,[0-12]],finaldata[:,13])
output = forest.predict(testdata)
forest = forest.fit(finaldata[:,[0::]],finaldata[:,13])
forest = forest.fit(finaldata[:,:],finaldata[:,13])
output = forest.predict(testdata)
forest = forest.fit(finaldata[:,0::12],finaldata[:,13])
output = forest.predict(testdata)
forest = forest.fit(finaldata[::,0::12],finaldata[:,13])
output = forest.predict(testdata)
forest = forest.fit(finaldata[::,1::12],finaldata[:,13])
forest = forest.fit(finaldata[::,1::12],finaldata[:,13])
output = forest.predict(testdata)
output = forest.predict(testdata)
forest = forest.fit(finaldata[::,1::12],finaldata[:,13])
forest = forest.fit(finaldata[::,1::12],finaldata[::,13])
output = forest.predict(testdata)
testdata2 = testdata.reshape((-1,13))
output = forest.predict(testdata)
output = forest.predict(testdata2)
forest = forest.fit(finaldata[::,1::12],finaldata[::,13])
forest
forest = forest.fit(finaldata[::,::],finaldata[::,13])
output = forest.predict(testdata)
forest = forest.fit(finaldata[::,0::12],finaldata[::,13])
forest = forest.fit(finaldata[::,::],finaldata[::,13])
forest
forest(n_features)
forest = forest.fit(finaldata[::,0::12],finaldata[::,13])
output = forest.predict(testdata)
forest = forest.fit(finaldata[::,[0,12]],finaldata[::,13])
output = forest.predict(testdata)
finaldata3 = finaldata[::,0::12]
finaldata3
finaldata3.shape
finaldata3 = finaldata[::,[0,12]]
finaldata3.shape
finaldata
finaldata3 = finaldata[::,[0:12]]
finaldata3 = finaldata[::,::12]
finaldata3.shape
finaldata
finaldata3
finaldata3 = finaldata
finaldata3.shape
finaldata4 = np.delete(finaldata3, (13), axis = 1)
finaldata4.shape
finaldata4
forest = forest.fit(finaldata4[::,::],finaldata[::,13])
output = forest.predict(testdata)
output
testdata2 = np.array([57,1,4,150,276,0,2,112,1,0.6,2,1,6])
output = forest.predict(testdata2)
output
testdata3 = np.array([65.0,0.0,3.0,140.0,417.0,1.0,2.0,157.0,0.0,0.8,1.0,1.0,3.0])
output = forest.predict(testdata3)
output
get_ipython().magic(u'save first_session 1-131')
