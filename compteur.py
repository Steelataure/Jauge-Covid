import requests
import RPi.GPIO as GPIO
from time import sleep

GPIO.setmode(GPIO.BCM)

#Spécifiez 18 de GPIO
GPIO.setup(26, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)

GPIO.setmode(GPIO.BCM)

#Spécifiez 18 de GPIO
GPIO.setup(18, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)

count = 0
while True:


    #Lorsque le capteur détecte un objet en mouvement, 1 est renvoyé.
    if GPIO.input(26) == 1:
        count = 0
        r = requests.get('https://jaugecovid.000webhostapp.com/inject.php?capteur=sortie)
        print("Mouvement détecté")
        print(r.text)
        sleep(2)

        #Lorsque le capteur détecte un objet en mouvement, 1 est renvoyé.
    if GPIO.input(18) == 1:
        count = 0
        r = requests.get('https://jaugecovid.000webhostapp.com/inject.php?capteur=entree)
        print("Mouvement détecté")
        print(r.text)
        sleep(2)