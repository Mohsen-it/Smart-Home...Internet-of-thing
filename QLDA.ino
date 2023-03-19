#include "DHT.h" 
#include <WiFiClient.h> 
#include <ESP8266HTTPClient.h> 
#include <ESP8266WiFi.h> 
#include <ESP8266mDNS.h> 
#include <ESP8266WebServer.h> 
#define DHTPIN 13 
#define MQ2PIN A0
#define DHTTYPE DHT11 
DHT dht(DHTPIN,DHTTYPE); 
float humidityData; 
float temperatureData;
float gasData;
// WiFi parameters 
const char* ssid = "Home E"; 
const char* password = "ali12345"; 
char server[] = "95.0.89.36";
WiFiClient client;
 HTTPClient http; 
//host to send data 
const char* host= "http://95.0.89.36:500/QLDA/Getstatus.php"; 
void setup() { 
  pinMode(MQ2PIN,INPUT);
  pinMode(4,OUTPUT); 
   pinMode(5,OUTPUT); 
    pinMode(16,OUTPUT); 
     pinMode(0,OUTPUT); 
      pinMode(2,OUTPUT); 
  Serial.begin(115200);
  delay(20);
   dht.begin();  
  WiFi.begin(ssid, password); 
delay(3000);  
} 
void loop() { 
  http.begin(host);  
  int httpCode=http.GET(); 
  String payload=http.getString();// get data from webhost continously 
  Serial.print(payload); 
   humidityData = dht.readHumidity(); 
  temperatureData = dht.readTemperature();  
   gasData=analogRead(MQ2PIN);
  Sending_To_phpmyadmindatabase();  
  delay(500);
  if(payload == "0")  // if data == 1 -> LED ON 
  { 
    digitalWrite(4,HIGH); 
    } 
   else if (payload == "1") // if data == 0 -> LED OFF 
   { 
    digitalWrite(4,LOW); 
    } 
    ///////////////////// 
    if(payload == "3")  // if data == 1 -> LED ON 
  { 
    digitalWrite(5,HIGH); 
    } 
   else if (payload == "2") // if data == 0 -> LED OFF 
   { 
    digitalWrite(5,LOW); 
    } 
    /////////////////////////////////// 
     if(payload == "4")  // if data == 1 -> LED ON 
  { 
    digitalWrite(16,HIGH); 
    } 
   else if (payload == "5") // if data == 0 -> LED OFF 
   { 
    digitalWrite(16,LOW); 
    } 
    if(payload == "6")  // if data == 1 -> LED ON 
  { 
    digitalWrite(0,HIGH); 
    } 
   else if (payload == "7") // if data == 0 -> LED OFF 
   { 
    digitalWrite(0,LOW); 
    } 
     if(payload == "8")  // if data == 1 -> LED ON 
  { 
    digitalWrite(2,HIGH); 
    } 
   else if (payload == "9") // if data == 0 -> LED OFF 
   { 
    digitalWrite(2,LOW); 
    } 
   
  delay(500); 
   http.end(); 
}
 void Sending_To_phpmyadmindatabase()   //CONNECTING WITH MYSQL 
 { 
   if (client.connect(server, 500)) { 
    Serial.println("Connected SERVER"); 
    // Make a HTTP request: 
    client.print("GET /QLDA/index1.php?humidity=");
    Serial.println("humidity=");//YOUR URL 
    Serial.println(humidityData); 
    client.print(humidityData); 
    client.print("&temperature="); 
    Serial.println("temperature="); 
    client.print(temperatureData); 
    Serial.println(temperatureData);
     client.print("&gas="); 
    Serial.println("gas="); 
    client.print(gasData); 
    Serial.println(gasData);
    client.print(" ");      //SPACE BEFORE HTTP/1.1 
    client.print("HTTP/1.1"); 
    client.println(); 
    client.println("Host:95.0.89.36"); 
    client.println("Connection: close"); 
    client.println(); 
   
   } 
 
 }
