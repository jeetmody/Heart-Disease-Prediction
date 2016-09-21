# coding: utf-8
import pandas as pd
import numpy as np
import csv as csv
csv_file_object = csv.reader(open('processed.data','rb')




	

)
csv_file_object = csv.reader(open('final.csv','rb')
)
for row in csv_file_object:
        data.append(row)
        
data = []
for row in csv_file_object:
        data.append(row)
        
data = np.array(data)
from sklearn.ensemble import RandomForestClassifier
forest=RandomForestClassifier(n_estimators=100)
finaldata3 = finaldata
finaldata3.shape
finaldata3 = data
finaldata3.shape
finaldata4 = np.delete(finaldata3, (13), axis = 1)
finaldata4.shape
finaldata4
forest = forest.fit(finaldata4[::,::],finaldata[::,13])
forest = forest.fit(finaldata4[::,::],data[::,13])
import pickle
f = open('random_classifier.pickle','wb')
pickle.dump(forest,f)
f.close()
get_ipython().magic(u'save second_session 1-25')
