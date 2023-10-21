const express = require("express");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.post("/", (req, res) => {
  const text = req.body.text;

  let response = "";

  if (text === "") {
    // This is the first request. Note how we start the response with CON
    response = `CON Welcome to Farmers Information System. What would you like to know? \n 1. Weather predictions to know when to plant\n2. Step by step procedure of planting`;
  } else if (text === "1") {
    // Business logic for first level response
    response = `CON Enter County location to check the weather prediction\n 1.Nakuru \n 2.Uasin Gishu`;
  } else if (text === "2") {
    // Business logic for first level response
    response = `CON What crop do you want to plant?\n 1. Maize \n2. Wheat`;
  } else if (text === "1*1") {
    // Business logic for first level response
    response = `CON Would you like to know the weather predictions?\n1. Weekly\n2. Monthly`;
  } else if (text === "2*1") {
    // Business logic for first level response
    response = `CON Enter the intended planting month.\n1.January \n2.February  `;
  } else if (text === "1*1*1") {
    // Business logic for first level response
    response = `END Weekly Report monday = 25 degrees \nTuesday = 30 degrees \nWednesday = 45 degrees \nThursday = 21 degrees \n Friday = 33 degrees`;
  } else if (text === "2*2*1") {
    response = "do the following steps for maize";
  } else if (text === "2*1*1") {
    response = `END Site Selection:\nChoose a sunny, well-drained location.\n2. Soil Preparation:\nTest and amend soil if necessary.\nTill the soil.\n3. Planting:\nPlant maize seeds at the right depth and spacing.\n`;
  } else {
    response = `END Go back\n`;
    response += `END cancel`;
  }

  res.set("Content-Type", "text/plain");
  res.send(response);
});

const port = 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
