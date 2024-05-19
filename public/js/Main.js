import Hello from "./modules/Hello.js";

class Main {
  constructor() {
    const hello = new Hello(name);
    alert(hello.hello());
  }
}

const mainInstance = new Main();
