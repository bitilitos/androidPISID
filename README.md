## Flutter PISID mobile app

## Instruções para instalação:

1) Download e instalar Android Studio (Usar JetBrain ToolBox)
2) Download Flutter https://docs.flutter.dev/get-started/install  e descompactar pasta Flutter (por exemplo, c:\flutter)
3) No Android Studio, instalar plugin Dart e plugin Flutter (File -> Settings -> Plugins)
4) No Android Studio:
  Tools -> Flutter -> Flutter clean (colocar caminho do flutter instalado em 2)
  Flutter Pub get para fazer download das dependencias do Flutter
5) Colocar scripts php em c:\xampp\httdocs\scripts (Estão atualizados para o nosso projeto em scripts php no git)

## Instruções geração apk:

1) Utilizar o apk em android/app/debug/app-debug.apk 
   ou gerar novo:
2) No Android Studio ir a Tools -> Flutter -> Open for editing in android studio, escolher abrir numa nova janela
3) Em Build -> Generate Signed Bundle/APK, escolher APK, escolher a chave teste1.jks:
    Key store password: password
    Key alias: key0
    Key password: password
4) Em alternativa podem criar uma chave nova
5) Escolher o profile da release (ainda só foi feito em debug)
6) De seguida com o apk gerado, passar para o telemovel e instalar (precisam de dar permissões a apps desconhecidas/não seguras, vai depender do dispositivo)

## Notas
This project is a starting point for a Flutter application.

A few resources to get you started if this is your first Flutter project:

- [Lab: Write your first Flutter app](https://flutter.dev/docs/get-started/codelab)
- [Cookbook: Useful Flutter samples](https://flutter.dev/docs/cookbook)

For help getting started with Flutter, view our
[online documentation](https://flutter.dev/docs), which offers tutorials,
samples, guidance on mobile development, and a full API reference.
