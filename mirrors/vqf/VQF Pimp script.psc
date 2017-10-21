Name Winamp2 VQF Decoder Plug-in v1.12a Setup
Text This will install the VQF input plug-in on your computer
OutFile in_vqf.exe
SetOutPath $INSTDIR\plugins
AddFile in_vqf.dll
AddFile tvqdec.dll
AddFile in_vqf.txt

ExecFile "$WINDIR\notepad.exe" $INSTDIR\plugins\in_vqf.txt
