#!/bin/env ruby

=begin
titulo: menor de dois ou iguais
enunciado: Criar um programa que receba dois n�meros e exiba qual o menor ou diga que s�o iguais
exemplos:
  23 34: o menor entre 23 e 34 � o 23
  34 23: o menor entre 34 e 23 � o 23
	34 34: os n�meros s�o iguais
dificuldade: 2
linguagem: ruby
solucao: utilizando operador ternario
categorias: [logica, if, else, ternario]
=end

# ENTRADA

n1 = ARGV[0].to_i
n2 = ARGV[1].to_i

# LOGICA

iguais = false
if n1 == n2
	iguais = true
else
	menor = n1 < n2 ? n1 : n2
end

# SAIDA

if iguais
	puts "os n�meros s�o iguais"
else
	puts "o menor entre #{n1} e #{n2} � o #{menor}"
end