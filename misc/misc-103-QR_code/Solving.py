from PIL import Image
import numpy
pic = Image.open("qrcode.png")
pix = numpy.array(pic)
for y in range(11, len(pix), 7):
    i = pix[y]
    for x in range(11, len(i), 7):
        if i[x][0] == 255:
            print("1", end="")
        else:
           print("0", end="")
    print("")