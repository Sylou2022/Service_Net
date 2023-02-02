import random

manches = int(input("Combien de manches voulez-vous jouer ? "))

score_joueur = 0
score_ordi = 0

options = ["pierre", "papier", "ciseaux"]

while score_joueur < manches and score_ordi < manches:
  choix_joueur = input("Que jouez vous ? Tapez 'pierre', 'papier' ou 'ciseaux' ")

  while choix_joueur not in options:
    input("Choix invalide ! Choisissez pierre, papier ou ciseaux (sans les guillemets)")

  choix_ordi = random.choice(options)

  if choix_joueur == choix_ordi:
    print("Égalité. Relancez le script pour rejouer")
  elif choix_joueur == "pierre" and choix_ordi == "ciseaux" \
  or choix_joueur == "papier" and choix_ordi == "pierre" \
  or choix_joueur == "ciseaux" and choix_ordi == "papier":
    print("Vous remportez la manche,", choix_joueur, "bat" , choix_ordi)
    score_joueur += 1
  else:
    print("L'ordinateur gagne la manche," , choix_ordi, "bat" , choix_joueur)
    score_ordi += 1

if score_joueur == manche:
  print("Vous avez gagné la partie !")
else:
  print("L'ordinateur gagne :(")