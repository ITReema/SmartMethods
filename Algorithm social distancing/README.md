# Algorithm social distancing
Algorithm to create a robot to be placed in the meeting hall, that prevents people gathering in the same place. 

## Algorithm idea
Algorithm to create a robot to be placed in the meeting hall, just 5 people in same place; Otherwise, the robot will send Alarm to user.

## Technique 
* [Bluetooth beacons](https://www.beaconstac.com/what-is-a-bluetooth-beacon)

## Flowchart
<p align="center">
  <img width="450" alt="flowchart" src="https://user-images.githubusercontent.com/27751735/87877021-8340a600-c9e4-11ea-8f60-b1c786170d34.png">
</p>
 
## Mechanism of use
1. When open the app, the app prompt to allow to open the bluetooth and the location.
2. App reads MAC Addresses around you.
3. If number people (MAC Addresses) less than or equal 5 you are in safe distance. 
4. If number people (MAC Addresses) greater than 5 will send alarm to stay away from gathering people.

## Stages of work
1. Buy Bluetooth beacons
2. Programming the application, If number of people less than or equal 5 you are in safe distance. if greter than 5 will send alarm to user.
