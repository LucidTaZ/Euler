import scala.math.BigInt.int2bigInt

object TaZMath {
  /**
   * Sum of x_0^x_0 + x_1^x_1 + ... + x_n^x^n
   * Needed for Euler 48
   */
  def powsum(n: Int): BigInt = {
    (1 to n).map {
      n => BigInt(n).pow(n)
    }.sum
  }
  
  def isPalindrome(n: Int): Boolean = {
    // TODO: Solution via strings feels cheaty
    val stringRepresentation = n.toString();
    stringRepresentation.reverse.equals(stringRepresentation)
  }
  
  def largestPalindromeOfTwoFactors(minProduct: Int, maxProduct: Int): Int = {
    val products: Seq[Int] = for {
      n <- minProduct to maxProduct
      m <- n to maxProduct
    } yield {
      n * m;
    }
    val palindromes = products.filter { isPalindrome _ }
    palindromes.max
  }
}