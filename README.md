#imagecompare
This project compares two jpeg images according to the image links provided and returns the comparison value on a scale from 0 to 100 (0 for completely different and 100 for exactly similar). The comparison is done pixelwise on jpeg images that are worked upon online. The pixelwise comparison eliminates the use of histograms and other packages which checks for the image intensity as a whole instead of a pixel-by-pixel approach. 

The project relies heavily on the gd library in php which makes colour differentiation plausible. To avoid image distortion or false results on comparison, the projects works on similar sized images. This is done to avoid the creation and subsequent comparison of new images created after resizing. 


#Authors
1.Suraj Suresh
2.Harikrishnan R
3.Sachin Giridhar
4.Jithin Babu
5.Alina Benny

#Practical Applications 
1.To compare the signature in cheques with the signature stored during time of creation of account
2.Authentication of online accounts with image comparison
3.Home door security services 

#Dependencies
1.Apache Server
2.GD Library in Php 

#Demo
The demo of the project can be viewed in http://svbox.phacsin.com
