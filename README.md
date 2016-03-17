# simple-weather-forecast
This is a simple PHP code to get the weather condtions of a paticular place given the address , location and state.We also are given the option to enter the choice of unit we want the temerature to be pinted it.
I can either be in celcius or farenheit .
Onclick of submit button it navigates to geocoding API which fetches the longitude and latitude of a location based on the address entered.It returns the data in form of XML.
Then we parse this XML data and parse the longitude and latidude to forecast.io API which tthen returns the weather condition of a place in JSON data format.
We then organise this data and print it in different tab of 24 hours 7 days etc.
