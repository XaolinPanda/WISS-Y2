#include <LiquidCrystal_PCF8574.h>
#include <Wire.h>

LiquidCrystal_PCF8574 lcd(0x27); // set the LCD address to 0x27 for a 16 chars and 2 line display

int show = -1;

void setup()
{
  int error;

  Serial.begin(115200);
  Serial.println("LCD...");

  // wait on Serial to be available on Leonardo
  while (!Serial)
    ;

  Serial.println("Dose: check for LCD");

  // See http://playground.arduino.cc/Main/I2cScanner how to test for a I2C device.
  Wire.begin();
  Wire.beginTransmission(0x27);
  error = Wire.endTransmission();
  Serial.print("Error: ");
  Serial.print(error);

  if (error == 0) {
    Serial.println(": LCD found.");
    show = 0;
    lcd.begin(16, 2); // initialize the lcd

  } else {
    Serial.println(": LCD not found.");
  } // if

} // setup()


void loop()
{
  if (show == 0) {
    lcd.setBacklight(255);
    lcd.home();
    lcd.clear();
    lcd.print("Henloooo");
    delay(1000);

  } else if (show == 1) {
    lcd.home();
    lcd.clear();
    lcd.print("Pliiis");

  } else if (show == 2) {
    lcd.home();
    lcd.clear();
    lcd.print("Leik and");

  } else if (show == 3) {
    lcd.home();
    lcd.clear();
    lcd.print("Subscreb");
    
  } else if (show > 3) {
    lcd.print(show - 4);
  } // if

  delay(1400);
  show = (show + 1) % 4;
} // loop()
