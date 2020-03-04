#include <LiquidCrystal_PCF8574.h>
#include <Key.h>
#include <Keypad.h>
#include <Wire.h>

#define Password_Length 5 //Password length for 4 char + NULL

char Data[Password_Length]; // Array for chars
char Master[Password_Length] = "1234"; //Password
byte data_count = 0, master_count = 0; //set to 0
bool pass_ok;
char customKey;

const byte ROWS = 4; 
const byte COLS = 3; 

char hexaKeys[ROWS][COLS] = {
  {'1', '2', '3'},
  {'4', '5', '6'},
  {'7', '8', '9'},
  {'*', '0', '#'}
};

byte rowPins[ROWS] = {9, 8, 7, 6}; 
byte colPins[COLS] = {5, 4, 3}; 

Keypad customKeypad = Keypad(makeKeymap(hexaKeys), rowPins, colPins, ROWS, COLS); 

LiquidCrystal_PCF8574 lcd(0x27);

void setup(){
   lcd.setBacklight(255);
   lcd.begin(16, 2); // initialize the lcd
   lcd.clear();
}

void loop(){
  lcd.setCursor(0,0);
  lcd.print("Enter Password");
  
  customKey = customKeypad.getKey();
  if (customKey){
    Data[data_count] = customKey;
    lcd.setCursor(data_count, 1);
    lcd.print(Data[data_count]);
    data_count++;
  }

  if(data_count == Password_Length-1){ 
    lcd.clear();
    lcd.setCursor(0,0);
    lcd.print("Password is ");

    if(!strcmp(Data, Master)) //string compare Data and Master
      delay
      lcd.print("OK");
    else
      lcd.print("Bad");

      delay(1000);
      lcd.clear();
      clearData();
    }
}

void clearData()
{
  while(data_count !=0) // if func used, checks if not 0, for any Array size
  {
    Data[data_count--] = 0; //clear Array
    }
    return;
  }
