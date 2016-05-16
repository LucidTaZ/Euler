import org.specs2.mutable.Specification

class TaZMathSpec extends Specification {
  "isPalindrome" should {
    "accept valid palindromes" in {
      TaZMath.isPalindrome(101) must beTrue
      TaZMath.isPalindrome(212) must beTrue
    }
    "reject invalid palindromes" in {
      TaZMath.isPalindrome(211) must beFalse
    }
    "work on single digits" in {
      TaZMath.isPalindrome(5) must beTrue
    }
  }
  "largestPalindromeOfTwoFactors" should {
    "work on the assignment specification" in {
      TaZMath.largestPalindromeOfTwoFactors(10, 99) must equalTo(9009)
    }
    "work on the assignment answer" in {
      TaZMath.largestPalindromeOfTwoFactors(100, 999) must equalTo(906609)
    }
  }
}
