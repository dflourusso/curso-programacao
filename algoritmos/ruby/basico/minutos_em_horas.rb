#!/bin/env ruby

=begin
titulo: Minutos em Horas
enunciado: Receba a dura��o de um filme em minutos e exibe o tempo em horas
exemplos:
  59: 00h59
  60: 01h00
  120: 02h00
  108: 01h48
dificuldade: 1
linguagem: ruby
solucao: Utilizar t�cnicas de formata��o
categorias: [matematica]
=end

# ENTRADA
duracao = ARGV.first.to_i

# L�GICA
horas = duracao / 60
minutos = duracao % 60

# SA�DA
puts "%02dh%02d" % [horas, minutos]