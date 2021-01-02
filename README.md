# CorregirRotacionImagenes
Corregir la rotación de una fotografía con textos tomando los datos de Google Cloud Vision

Muchas veces tenemos la necesidad de hacer el reconocimiento OCR de muchas imágenes de un tipo específico de imágenes, por ejemplo facturas, formularios, encuestas, etc., y estas son tomadas por diferentes personas en varios lugares. Para ello es necesario desarrollar un programa que corrija el ángulo de la fotografía tomada.
Puede ser 90º o un poco inclinado, 30º, 35º etc.
Para ello estoy trabajando en un pequeño programa en php que pueda actuar en el lado del servidor como apoyo para ayudar a corregir la rotación de una imagen tomando como base el archivo JSON devuelto de google cloud vision, más exactamente la línea de dibujo de un texto ya reconocido, o sea dos punto específicos en el eje de coordenadas.
