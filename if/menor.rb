#!/bin/env ruby

=begin
titulo: menor de dois
enunciado: Criar um programa que receba dois n�meros distintos e exiba qual o menor
exemplos:
  23 34: o menor entre 23 e 34 � o 23
  34 23: o menor entre 34 e 23 � o 23
dificuldade: 1
linguagem: ruby
solucao: utilizando operador ternario
categorias: [logica, ternario]
=end

# ENTRADA

n1 = ARGV[0].to_i
n2 = ARGV[1].to_i

# LOGICA

menor = n1 < n2 ? n1 : n2

# SAIDA

puts "o menor entre #{n1} e #{n2} � o #{menor}"
