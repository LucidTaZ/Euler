#!/usr/bin/env ruby

def divisorSum (x)
	# Sum of all integer divisors of the number
	sum = 1
	m = Math.sqrt(x).floor
	(2..m).each do |t|
		if (x % t) == 0
			sum += t
			if (t * t < x)
				sum += x / t
			end
		end
	end
	sum
end

def isAbundant (x)
	# Sum of divisors of the number is greater than the number
	(divisorSum x) > x
end

def isAbundantSum (x)
	# Can be written as the sum of two abundant numbers
	m = (x / 2).floor
	result = false
	(1..m).each do |t|
		if isAbundant(t) && isAbundant(x-t)
			result = true
			break
		end
	end
	result
end

def sumNonAbundantSums ()
	# Sum of all numbers that cannot be written as the sum of two abundant numbers
	sum = 0
	(1..28123).each do |t|
		if (!isAbundantSum(t))
			sum += t
		end
	end
	sum
end

if ARGV.count < 1
	puts sumNonAbundantSums
else
	x = Integer(ARGV[0])
	puts(isAbundantSum x)
end

