int pinButton = 8;
int LED = 9;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  pinMode(pinButton, INPUT); //button
  pinMode(LED, OUTPUT); //LED

}

void loop() {
  // put your main code here, to run repeatedly:
  Serial.println("Start");
  int stateButton = digitalRead(pinButton); 
  if(stateButton == 1) { //if pressed
     digitalWrite(LED, HIGH);
     Serial.println("HIGH");
  } else { //if not pressed
     digitalWrite(LED, LOW); 
  }
  
}
