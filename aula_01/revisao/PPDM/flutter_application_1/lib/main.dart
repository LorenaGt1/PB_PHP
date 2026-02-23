import 'package:flutter/material.dart';

void main() {
  runApp(const MainApp());
}

class MainApp extends StatelessWidget {
  const MainApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: Text("Primeiro App"),
          backgroundColor: Colors.blueAccent,
          titleTextStyle: TextStyle (color: Colors.white),
          centerTitle: true,
        ),
        body: Center(
          child: Row(
            children: [
              Image.asset("", width: 100)
            ],
          ),
        ),
      ),
    );
  }
}
