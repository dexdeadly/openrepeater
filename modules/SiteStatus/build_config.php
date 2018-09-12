<?php

/*
// Build Config
$module_config_array['Module'.$cur_mod['svxlinkName']] = [
	'NAME' => $cur_mod['svxlinkName'],
	'ID' => $cur_mod['svxlinkID'],
	'TIMEOUT' => '60',				
	'FIFO_LEN' => '60',
	'REPEAT_DELAY' => '1000',
];
*/

// Build Config
$module_config_array['Module'.$cur_mod['svxlinkName']] = [
	'NAME' => $cur_mod['svxlinkName'],
	'ID' => $cur_mod['svxlinkID'],
	'PLUGIN_NAME' => 'Tcl',				
	'DIGITAL_GPIO_PATH' => '/sys/class/gpio/gpio',
	'DIGITAL_SENSORS_COUNT' => '1',
	'DIGITAL_0' => '496',
	'DIGITAL_TYPE_0' => 'DOOR_ACTIVE_HIGH',
	'ANALOG_SENSORS_COUNT' => '1',
	'ANALOG_GPIO_PATH' => '/sys/bus/iio/devices/iio:device0/in_voltage',
	'ANALOG_0' => '0',
	'ANALOG_TYPE_0' => 'TEMPERATURE',
	'ANALOG_HYSTERISIS_0' => '45',
];

/*
[ModuleSiteStatus]
NAME=SiteStatus
PLUGIN_NAME=Tcl

# Path in the file system where the digital inputs can be monitored
DIGITAL_GPIO_PATH="/sys/class/gpio/gpio"

# Available options for digital (1/0) sensor types, note these should always be in CAPS
# DOOR_ACTIVE_HIGH - Announces a door is open (open = true, closed = false)
# DOOR_ACTIVE_LOW - Announces a door is open (open = false, closed = true)
# FUEL_ACTIVE_HIGH - Announces a low fuel sensor is activated (active signal = true) 
# FUEL_ACTIVE_LOW - Announces a low fuel sensor is activated (active signal = false) 
# WATER - Not implemented yet
# FIRE - Not implemented yet
# SOLAR_ACTIVE_HIGH - Announces a Solar Charger state (active signal = true)
# SOLAR_ACTIVE_LOW - Announces a Solar Charger state (active signal = false)
# BATTERY - not implememented yet

#Define the number of sensors that are being used.  This number is the physical number of sensors, so counting
# starts at 1.  Set to 0 to disable the digital sensors portion of the module
DIGITAL_SENSORS_COUNT=1 

# Define DIGITAL INPUT sensor pins. This must start with index "0", and must have a type defined from the list
# above.
# Example:
# DIGITAL_0=496
# DIGITAL_TYPE_0=DOOR_ACTIVE_HIGH
#
# Be sure to include any GPIO pins defined here in the svxlink-gpio.conf file or they will not get initialized
# and things won't work as you expect them to.


DIGITAL_0=496
DIGITAL_TYPE_0=DOOR_ACTIVE_HIGH
#DIGITAL_1=507
#DIGITAL_TYPE_1=FUEL_ACTIVE_LOW


#Define the number of sensors that are being used.  This number is the physical number of sensors, so counting
# starts at 1.  Set to 0 to disable the digital sensors portion of the module
ANALOG_SENSORS_COUNT=1 

# Path in the file system where the analog voltage inputs can be monitored
ANALOG_GPIO_PATH="/sys/bus/iio/devices/iio:device0/in_voltage" 
# note that you may have to update the tcl file, as the final path is defined as
# "/sys/bus/iio/devices/iio:device0/in_voltage<number 0-N>_raw".  This supports the 
# MCP320x drivers under raspberry pi by default.


# Available options for analog (1/0) sensor types, note these should always be in CAPS
# TEMPERATURE - Placeholder only, user to configure based on scaling factors
# BATTERY_VOLTAGE  - Placeholder only, user to configure based on scaling factors

# Define ANALOG INPUT sensor pins. This must start with index "0", and must have a type defined from the list
# above.
# Example:
# ANALOG_0=0
# ANALOG_TYPE_0=TEMPERATURE
# ANALOG_HYSTERISIS_0=40
#
# Hysterisis is used on a channel by channel basis to prevent unwanted transmissions that result from expected
# noise in the analog sensor.  Typically this should be as small as possible so any real events are picked up
# while not falsely activating.  This is similar to the squelch feature for audio

ANALOG_0=0
ANALOG_TYPE_0=TEMPERATURE
ANALOG_HYSTERISIS_0=45
*/



?>