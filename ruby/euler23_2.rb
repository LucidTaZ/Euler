#!/usr/bin/env ruby

def divisor_sum(x)
  # Sum of all integer divisors of the number
  sum = 1 # 1 is a guaranteed integer divisor
  m = Math.sqrt(x).floor
  (2..m).select {|t| x % t == 0}.each { |t|
    sum += t
    sum += x / t if (t * t < x)
  }
  sum
end

def is_abundant(x)
  # Sum of divisors of the number is greater than the number
  (divisor_sum x) > x
end

def generate_abundants(max)
  (12..max).select { |t| is_abundant t }
end

def generate_abundant_sums(abundants, max)
  # Create a boolean array where the value is true for indexes that are abundant sums
  # An abundant sum is a number that is the sum of two abundant numbers
  result = []
  abundants.each_with_index { |a,i|
    (i..abundants.length-1).each { |j|
      b = abundants[j]
      break if a+b > max
      result[a+b] = true
    }
  }
  result
end

def sum_non_abundant_sums(abundantSums, max)
  # Sum every number that is not an abundant sum
  (1..max).select { |t| !abundantSums[t] }.reduce(:+)
end

max = 28123 # Every higher number is abundant, so we are not interested
abundants = generate_abundants(max)
abundantSums = generate_abundant_sums(abundants, max)
answer = sum_non_abundant_sums(abundantSums, max)
puts answer
