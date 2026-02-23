@echo off
REM Starte CSV-Download-Test für Playwright

echo Starte CSV-Download-Test...
cd /d "%~dp0"

REM Node-Skript ausführen
node testCSV.js

echo Fertig!
pause