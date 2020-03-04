void setup() {
  // put your setup code here, to run once:
  pinMode(LED_BUILTIN, OUTPUT);

}

void loop() {
  // put your main code here, to run repeatedly:

for(int i = 0; i < 3; i++){
    pause(0);
  }
delay(200);
for(int i = 0; i < 3; i++){
    pause(1);
  }
delay(200);  
for(int i = 0; i < 3; i++){
    pause(0);
  }
}

void pause(int p) {
  if( p == 0) {
    digitalWrite(LED_BUILTIN, HIGH);
    delay(200);
    digitalWrite(LED_BUILTIN, LOW);
    }
  else {
    digitalWrite(LED_BUILTIN, HIGH);
    delay(1000);
    digitalWrite(LED_BUILTIN, LOW);
    }
   delay(200);
  }
