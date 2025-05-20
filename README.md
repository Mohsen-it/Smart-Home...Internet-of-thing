# 🏠 Smart‑Home IoT System

A smart home automation system that allows you to monitor sensors and control home appliances remotely via Internet of Things (IoT) technologies.

---

## ⚙️ Features

- **Sensor Monitoring**
Read data such as temperature and humidity from a DHT11 sensor and display it directly in the control panel.

- **Device Control**
Turn on and off home appliances (lights, fans, etc.) from the interface or via an API.

- **Interactive Web Interface**
A responsive `index.php` page for displaying data and controlling appliances in real time.

- **MySQL Database**
Stores sensor measurements and device statuses for later viewing or analysis.

- **Arduino Integration**
A `QLDA.ino` file connects the Arduino board (or ESP8266/ESP32) to a web server via Wi-Fi.

---

## 🧰 Requirements

| Type | Details |
|-----|---------|
| **Hardware** | Arduino board (such as Uno or Mega) <br> DHT11 sensor <br> Wi-Fi module (ESP8266 or built into ESP32) <br> Relays to control devices |
| **Software** | ArduinoIDE <br> Apache server + PHP≥7.4 <br> MySQL/MariaDB <br> Modern browser |

---

## 📁 Project Structure

```text
Smart-Home...Internet-of-thing/
├── QLDA.ino # Arduino Code
├── connect.php # Set up a database connection
├── Getstatus.php # Fetch hardware status (API)
├── Updatestatus.php # Update status (API)
├── index.php # Front-end
├── style.css # CSS layouts
├── sc.js # JavaScript script
├── qlda.sql # Database file
└── README.md # This file
```

---

## 🚀 Getting Started

### 1️⃣ Database Setup

1. Create a new database (e.g., `smart_home`).
2. Import the file `qlda.sql` into it.
3. Update the connection information in `connect.php`:

```php
$servername = "localhost";
$username = "db_user";
$password = "db_pass";
$dbname = "smart_home";
```

### 2️⃣ Uploading the Arduino Code

1. Open `QLDA.ino` in **ArduinoIDE**.
2. Edit the Wi-Fi network and server information (IP or domain name) if necessary.
3. Upload the code to your board.

### 3️⃣ Running the Server

1. Place the project files inside the server folder (e.g., `htdocs` or `www`).
2. Open `http://localhost/index.php` in your browser.
3. Enjoy instant control over devices and viewing sensor data!

---

## 🌐 Important Links

| File | Description |
|-----|------|
| **index.php** | Front-end Dashboard |
| **Getstatus.php** | API for retrieving device status |
| **Updatestatus.php** | API for updating device status (on/off) |
| **QLDA.ino** | Arduino code for reading sensors and communicating with the server |

---

## ❓ Frequently Asked Questions

<details>
<summary>Does the system work offline?</summary>

No, it requires a Wi-Fi connection to communicate between the board and the server.

</details>

<details>
<summary>Can it be integrated with Google Assistant or Alexa?</summary>

Not directly, but you can create a webhook or intermediate API to integrate the system with smart assistants.

</details>

<details>
<summary>Can it be deployed on free hosting?</summary>

Yes, if it supports PHP and MySQL, but paid hosting or running locally will yield better performance.

</details>

---

## 🧠 Ideas for Future Development

- Adding an authentication system and assigning user roles.
- Drawing real-time and historical graphs of sensor data.
- Supports push notifications when certain thresholds are exceeded.
- Create a mobile app (Flutter or React Native).
- Store data in the cloud in Firebase or MongoDBatlas.

---

## 👨‍💻 Author

- **Abdul Mohsen Sheikh Mohammed** – IT Engineer and Web/IoT Developer
- GitHub: [@Mohsen‑it](https://github.com/Mohsen-it)
- Contact: via social media accounts

---

## 📄 License

Distributed under the **MIT License**. See the `LICENSE` file for more information.

> This project was developed for educational purposes to demonstrate how to build an integrated Internet of Things system. You are free to modify and expand it while maintaining credit for the source.
