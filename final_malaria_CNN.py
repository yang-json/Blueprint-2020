#!/usr/bin/env python
# coding: utf-8

# In[1]:


import numpy as np
import pandas as pd
import os
parasitized_data = os.listdir("C:/users/ryanr/Desktop/Parasitized")
uninfected_data = os.listdir("C:/users/ryanr/Desktop/Uninfected")


# In[2]:


import cv2
import matplotlib.pyplot as plt 
import seaborn as sns
import os
from PIL import Image
from keras.preprocessing.image import img_to_array
from keras.preprocessing.image import load_img
from keras.utils import np_utils
import keras
from keras.models import Sequential
from keras.layers import Dense, Dropout, Flatten
from keras.layers import Conv2D, MaxPooling2D


# In[3]:


data = []
labels = []
for img in parasitized_data:
    try:
        img_read = plt.imread("C:/users/ryanr/Desktop/Parasitized/" + img)
        img_resize = cv2.resize(img_read, (50, 50))
        img_array = img_to_array(img_resize)
        data.append(img_array)
        labels.append(1)
    except:
        None
print("-")      
for img in uninfected_data:
    try:
        img_read = plt.imread("C:/users/ryanr/Desktop/Uninfected/" + img)
        img_resize = cv2.resize(img_read, (50, 50))
        img_array = img_to_array(img_resize)
        data.append(img_array)
        labels.append(0)
    except:
        None


# In[4]:


image_data = np.array(data)
labels = np.array(labels)


# In[5]:


idx = np.arange(image_data.shape[0])
np.random.shuffle(idx)
image_data = image_data[idx]
labels = labels[idx]


# In[6]:


from sklearn.model_selection import train_test_split
x_train, x_val, y_train, y_val = train_test_split(image_data, labels, 
                                                    test_size = 0.2, 
                                                    random_state = 101)


# In[7]:


num_classes = 2
y_train = np_utils.to_categorical(y_train, num_classes)
y_val = np_utils.to_categorical(y_val, num_classes)


# In[8]:


print(f'SHAPE OF TRAINING IMAGE DATA : {x_train.shape}')
print(f'SHAPE OF TESTING IMAGE DATA : {x_val.shape}')
print(f'SHAPE OF TRAINING LABELS : {y_train.shape}')
print(f'SHAPE OF TESTING LABELS : {y_val.shape}')


# In[9]:


len(x_train)
x_train = x_train[0:20000]
y_train = y_train[0:20000]
x_val = x_val[0:5000]
y_val = y_val[0:5000]


# model = Sequential()
# model.add(Conv2D(64, kernel_size=(3, 3),
#                  activation='relu',
#                  data_format = 'channels_first',
#                  input_shape=(50, 50, 1)))
# 
# model.add(MaxPooling2D(pool_size = (2, 2)))
# 
# model.add(Conv2D(64, (3, 3), activation='relu'))
# 
# model.add(MaxPooling2D(pool_size = (2, 2)))
# 
# model.add(Conv2D(128, (3, 3), activation='relu'))
# 
# model.add(Flatten())
# 
# model.add(Dense(64, activation='relu'))
# 
# model.add(Dense(2, activation='sigmoid'))

# In[10]:


from keras import optimizers
from keras import backend as K
from keras.layers import BatchNormalization
def CNNbuild(height, width, classes, channels):
    model = Sequential()
    
    inputShape = (height, width, channels)
    chanDim = -1
    
    if K.image_data_format() == 'channels_first':
        inputShape = (channels, height, width)
    model.add(Conv2D(32, (3,3), activation = 'relu', input_shape = inputShape))
    model.add(MaxPooling2D(2,2))
    model.add(BatchNormalization(axis = chanDim))
    model.add(Dropout(0.2))

    model.add(Conv2D(32, (3,3), activation = 'relu'))
    model.add(MaxPooling2D(2,2))
    model.add(BatchNormalization(axis = chanDim))
    model.add(Dropout(0.2))

    model.add(Conv2D(32, (3,3), activation = 'relu'))
    model.add(MaxPooling2D(2,2))
    model.add(BatchNormalization(axis = chanDim))
    model.add(Dropout(0.2))

    model.add(Flatten())
    
    model.add(Dense(512, activation = 'relu'))
    model.add(BatchNormalization(axis = chanDim))
    model.add(Dropout(0.5))
    model.add(Dense(classes, activation = 'softmax'))
    
    return model


# In[11]:


height = 50
width = 50
classes = 2
model = CNNbuild(50, 50, 2, 3)
model.summary()


# In[13]:


model.compile(loss = 'categorical_crossentropy', 
              optimizer = 'Adam', 
              metrics = ['accuracy'])

h = model.fit(x_train, y_train, epochs = 10, batch_size = 32)


# In[14]:


predictions = model.evaluate(x_val, y_val)


# In[15]:


print(f'LOSS : {predictions[0]}')
print(f'ACCURACY : {predictions[1]}')


# In[16]:


model.save("C:/users/ryanr/Desktop/trained_malaria.h5")


# In[ ]:




