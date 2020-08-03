# Algorithm social distancing
Algorithm to create a robot to be placed in the meeting hall, that prevents people gathering in the same place. 

## Algorithm idea
Algorithm to create a robot to be placed in the meeting hall, just 5 people in same place; Otherwise, the robot will send Alarm to user.
<p align="center">
  <img width="545" alt="meeting_hall" src="https://user-images.githubusercontent.com/27751735/89232259-be9bc100-d5ef-11ea-9595-032007df18de.png">
</p>


## Technique 
* [Bluetooth beacons](https://www.beaconstac.com/what-is-a-bluetooth-beacon)

## Flowchart
<p align="center">
  <img width="450" alt="flowchart" src="https://user-images.githubusercontent.com/27751735/87877021-8340a600-c9e4-11ea-8f60-b1c786170d34.png">
</p>
 
## Mechanism of use
* When open the app, the app prompt to allow to open the bluetooth and the location.
* App reads MAC Addresses around you.
* If number people (MAC Addresses) less than or equal 5 you are in safe distance. 
* If number people (MAC Addresses) greater than 5 will send alarm to stay away from gathering people.

## Stages of work
* Buy Bluetooth beacons
* Programming the application, If number of people less than or equal 5 you are in safe distance. if greter than 5 will send alarm to user.
