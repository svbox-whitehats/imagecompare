#imagecompare
This project compares two jpeg images according to the image links provided and returns the comparison value on a scale from 0 to 100 (0 for completely different and 100 for exactly similar). The comparison is done pixelwise on jpeg images that are worked upon online. The pixelwise comparison eliminates the use of histograms and other packages which checks for the image intensity as a whole instead of a pixel-by-pixel approach.

Colour recognition is another advantage of this algorithm, which distinguishes images based on individual colours rather than the intensity variation. Without colour recognition a pure white and pure black image would produce a 100% match. imagecompare stealthily addresses this glitch that most other algorithms don't. 

The project relies heavily on the gd library in php which makes colour differentiation plausible. To avoid image distortion or false results on comparison, the projects works on similar sized images. This is done to avoid the creation and subsequent comparison of new images created after resizing. 


#Authors
1.Suraj Suresh <br />2.Harikrishnan R<br />3.Sachin Giridhar<br />4.Jithin Babu<br />5.Alina Benny

#Practical Applications 
1.To compare the signature in cheques with the signature stored during time of creation of account<br />2.Authentication of online accounts with image comparison<br />3.Home door security services 

#Dependencies
1.Apache Server<br />2.GD Library in Php 

#Demo
The demo of the project can be viewed in http://svbox.phacsin.com
