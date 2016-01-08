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
}