#!/usr/bin/env python
# coding: utf-8

# In[1]:


from numpy import loadtxt
from keras.models import load_model
model = load_model("C:/users/ryanr/Desktop/trained_malaria.h5")


# In[2]:


import matplotlib.pyplot as plt 
import cv2
from keras.preprocessing.image import img_to_array
import numpy as np


# In[3]:


def evaluate_para(img):
    img_read = plt.imread("C:/users/ryanr/Desktop/Parasitized/" + img)
    img_resize = cv2.resize(img_read, (50, 50))
    img_array = img_to_array(img_resize)
    image_data = np.array(img_array)
    image_data = np.expand_dims(image_data, 0)
    image_data.shape
    predic = model.predict(image_data)
    return predic

def evaluate_hlth(img):
    img_read = plt.imread("C:/users/ryanr/Desktop/Uninfected/" + img)
    img_resize = cv2.resize(img_read, (50, 50))
    img_array = img_to_array(img_resize)
    image_data = np.array(img_array)
    image_data = np.expand_dims(image_data, 0)
    image_data.shape
    predic = model.predict(image_data)
    return predic


# In[4]:


img = "C33P1thinF_IMG_20150619_120645a_cell_217.png"
print(evaluate_para(img)[0][1])


# In[5]:


img = "C1_thinF_IMG_20150604_104722_cell_60.png"
print(evaluate_hlth(img)[0][1] * 100)

