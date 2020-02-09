#!/usr/bin/env python
# coding: utf-8

# In[2]:


from numpy import loadtxt
from keras.models import load_model
model = load_model("C:/users/ryanr/Desktop/trained_malaria.h5")


# In[3]:


import matplotlib.pyplot as plt 
import cv2
from keras.preprocessing.image import img_to_array
import numpy as np


# In[4]:


import os
folder = os.listdir("C:/xampp/htdocs/php/uploads")
print(folder)


# In[5]:


def read(location):
    img_read = plt.imread(location)
    img_resize = cv2.resize(img_read, (50, 50))
    img_array = img_to_array(img_resize)
    image_data = np.array(img_array)
    image_data = np.expand_dims(image_data, 0)
    image_data.shape
    predic = model.predict(image_data)
    return predic


# In[22]:


import shutil
import time
import json
while (True):
    folder = os.listdir("C:/xampp/htdocs/php/uploads")
    if len(folder) != 0:
        file_path = "C:/xampp/htdocs/php/uploads/" + folder[0]
        result = read(file_path)[0][1] * 10000
        print_stat = "" + str(int(result) / 100) + ""
        os.remove("C:/xampp/htdocs/php/test.json")
        f = open("C:/xampp/htdocs/php/test.json", "w")
        with open("C:/xampp/htdocs/php/test.json", "w") as write_file:
            data = json.dump(print_stat, write_file)
        os.remove(file_path)
        f.close()
        
    time.sleep(3)
    


# In[9]:


f = open("C:/xampp/htdocs/php/test.json", "w")


# In[12]:


with open("C:/xampp/htdocs/php/test.json", "w") as write_file:
            data = json.dump("hi", write_file)


# In[20]:


f.close()


# In[78]:


os.remove("C:/xampp/htdocs/php/test.json")


# In[ ]:




