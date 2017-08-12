import RPi.GPIO as GPIO
import time, sys

GPIO.setmode(GIPO.BCM)

port_l = 4
port_r = 17
GPIO.setup(port_l, GPIO.OUT)
GPIO.setup(port_r, GPIO.OUT)

while True:
    try:
        GPIO.output(port_l, GPIO.HIGH)
        GPIO.output(port_r, GPIO.LOW)
        time.sleep(0.3)
        GPIO.output(port_l, GPIO.LOW)
        GPIO.output(port_r, GPIO.HIGH)
        time.sleep(0.3)
    except KeyboardInterrupt:
        GPIO.cleanup()
        sys.exit()
