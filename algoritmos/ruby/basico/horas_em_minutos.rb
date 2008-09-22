#!/bin/env ruby

=begin
titulo: Horas em Minutos
enunciado: Receba a dura��o de um filme em horas e minutos, e exibe o tempo em minutos
exemplos:
  0 59: 59
  1 0: 60
  2 0: 120
  1 48: 108
dificuldade: 1
linguagem: ruby
solucao: Utilizar t�cnicas de formata��o
categorias: [matematica]
=end

# ENTRADA
horas = ARGV.first.to_i
minutos = ARGV.last.to_i

# L�GICA
duracao = horas * 60 + minutos

# SA�DA
puts duracao