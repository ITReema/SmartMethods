# ROS Installation

Steps install ROS (Robot Operating System).

## Requirement
* [VirtualBox](https://www.virtualbox.org)
* [Ubuntu](https://ubuntu.com)
* [ROS](https://www.ros.org)

## Installation
 > ### VirtualBox
1. Download [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
2. Open VirtualBox Application
- On a **Windows** host, in the Programs menu, click on the item in the VirtualBox group. On some Windows platforms, you can also enter VirtualBox in the search box of the Start menu.
- On a **Mac OS X** host, in the Finder, double-click on the VirtualBox item in the Applications folder.
- On a **Linux**  host, may have been placed in either the System or System Tools group of your Applications menu. Alternatively, you can enter VirtualBox in a terminal window.

When you start Oracle VM VirtualBox for the first time, a window like the following is displayed:
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88479307-d5d71080-cf56-11ea-910d-96c97bd55792.png">
</p>
> ### Ubuntu

1. Download [Ubuntu](https://ubuntu.com/download/desktop)
2. Open VirtualBox Application
3. To create Virtual Machine,Click New in the VirtualBox Manager window
<p align="center">
    <img width="600"src="https://user-images.githubusercontent.com/27751735/88479499-3581eb80-cf58-11ea-9b17-fb8e71c508b3.png">
 </p>
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88479748-0d938780-cf5a-11ea-9514-d14a0b81b907.png">
 </p>
- The **Name** of the VM you choose is shown in the machine list of the VirtualBox Manager window.
- The **Machine Folder** is the location where VMs are stored on your computer.
- Operating System **Type**, select the Liunx OS to install.
- **Version** select Ubuntu (64-bit).
- Select the **Memory size** (RAM) 4 GB.
- Virtual **Hard Disk** pick create a Virtual Hard Disk now. 
- click the **Create** button.
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88480647-cf00cb80-cf5f-11ea-855e-c3a3a522c981.png">
</p>
- Select the **File size** 35 GB.
- **Hard disk file type** pick VDI (VirtualBox Disk Image).
- **Storage on physical hard disk** pick Dynamically allocated.
- click the **Create** button.

<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88480500-f014ec80-cf5e-11ea-8153-09c4090e4d45.png">
</p>
- To running Virtual Machine **Ubuntu** 
- Double-click on the Ubuntu VM in the list in the VirtualBox Manager window. Or click **Start** at the top of the window.
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88480833-f6a46380-cf60-11ea-9761-1a498392e41f.png">
</p>

<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88480889-47b45780-cf61-11ea-9429-fb61ef372945.png">
</p>
- Click the small folder icon. Pick an image file Ubuntu on your host disks.
- click the **Start** button.

<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481243-f1e0af00-cf62-11ea-8917-72c1b0e367d2.png">
</p>
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481244-f2794580-cf62-11ea-8de9-3b209ee7398d.png">
</p>
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481246-f311dc00-cf62-11ea-91e3-5c5a7252aaf4.png">
</p>
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481249-f4430900-cf62-11ea-9e0b-9382ae55d146.png">
</p>
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481252-f5743600-cf62-11ea-930f-bccb267681e3.png">
</p>
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481255-f6a56300-cf62-11ea-8fdf-e9e6a1587291.png">
</p>
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481257-f86f2680-cf62-11ea-9285-e3ac1ba9f59d.png">
</p>
- Installation process.
- When installation Complete click on  **Restart Now**


 > ### ROS
1. Open Terminal
2. ```lsb_release -a``` to show Linux distribution name
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88481762-f8bcf100-cf65-11ea-8dc2-8e3473560523.png">
</p>
3. [ROS Noetic Ninjemys](http://wiki.ros.org/noetic/Installation) is targeted at the Ubuntu 20.04 (Focal) release.
* Single line ROS Noetic Installation:

```
wget -c https://raw.githubusercontent.com/qboticslabs/ros_install_noetic/master/ros_install_noetic.sh && chmod +x ./ros_install_noetic.sh && ./ros_install_noetic.sh

```
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88482261-d7a9cf80-cf68-11ea-88f3-aa294c996961.png">
</p>

4. To check the ROS version ```rosversion -d```
<p align="center">
    <img width="600"src= "https://user-images.githubusercontent.com/27751735/88482225-99141500-cf68-11ea-983d-b74df13cb486.png">
</p>

