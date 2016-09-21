#!/usr/bin/env python

from flask import Flask, render_template, request, flash
from logging import DEBUG
import numpy as np
import csv as csv
from sklearn.ensemble import RandomForestClassifier
import pickle

app = Flask(__name__)
app.config['SECRET_KEY'] = '\xb8\xcd0\x15\x84\x0f2\xd5s\x9e\xb1\xc5\xc7\xa7\x82PW\xd6A\xe5\xdc[Z\x91'


@app.route('/index', methods=['GET','POST'])
def index():
	if request.method == "POST":
		att1 = request.form['att1']
		att2 = request.form['att2']
		att3 = request.form['att3']
		att4 = request.form['att4']
		att5 = request.form['att5']
		att6 = request.form['att6']
		att7 = request.form['att7']
		att8 = request.form['att8']
		att9 = request.form['att9']
		att10 = request.form['att10']
		att11 = request.form['att11']
		att12 = request.form['att12']
		att13 = request.form['att13']
		store_values(att1,att2,att3,att4,att5,att6,att7,att8,att9,att10,att11,att12,att13)
		output2 = run_algo()
		flash("Predicted Output = {}".format(output2))
		return render_template('index.html')
	return render_template('index.html')	

testdata = []

def store_values(att1,att2,att3,att4,att5,att6,att7,att8,att9,att10,att11,att12,att13):
	testdata.append(att1)
	testdata.append(att2)
	testdata.append(att3)
	testdata.append(att4)
	testdata.append(att5)
	testdata.append(att6)
	testdata.append(att7)
	testdata.append(att8)
	testdata.append(att9)
	testdata.append(att10)
	testdata.append(att11)
	testdata.append(att12)
	testdata.append(att13)
	return testdata
	
output =[]

def run_algo():
	f = open('random_classifier.pickle')
	forest = pickle.load(f)
	f.close()
	output = forest.predict(testdata)
	return output
	

if __name__ == "__main__":
	app.run(debug=True)
		