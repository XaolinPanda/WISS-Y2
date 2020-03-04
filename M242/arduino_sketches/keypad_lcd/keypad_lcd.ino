#include <LiquidCrystal_PCF8574.h>
#include <Key.h>
#include <Keypad.h>
#include <Wire.h>


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
  char customKey = customKeypad.getKey();
  if (customKey){
    lcd.clear();
    lcd.setCursor(0, 0); 
    lcd.print(customKey);
  }
}
