/*
解法の詳細説明：

1. 問題の本質：
   この問題は、与えられた条件（高橋くんの記憶）に合致する4桁の暗証番号の数を数えることです。

2. アプローチ：
   - 可能な全ての4桁の暗証番号（0000から9999まで）を生成します。
   - 各暗証番号が高橋くんの記憶と一致するかをチェックします。
   - 一致する暗証番号の数をカウントします。

3. 実装の詳細：

   a) 暗証番号の生成:
      - 0から9999までの数字を生成し、各数字を4桁の文字列に変換します。
      - fmt.Sprintf("%04d", i) を使用して、必ず4桁になるよう先頭に0を付けます。

   b) 記憶との一致チェック:
      - 各暗証番号に対して、0から9までの各数字について：
        * その数字が暗証番号に含まれているかをチェックします。
        * 記憶（入力文字列S）の対応する位置を確認します：
          - 'o': その数字が必ず含まれている必要があります。
          - 'x': その数字が含まれていてはいけません。
          - '?': どちらでも構いません。

   c) カウンティング:
      - 全ての条件を満たす暗証番号の数をカウントします。

4. 効率性：
   - 全ての可能な暗証番号（10000個）をチェックするため、
     計算量は O(10000 * 10) = O(100000) となります。
   - これは十分に効率的で、現代のコンピュータでは瞬時に計算できます。

5. Go언の特徴を活かした実装：
   - strconv.Itoa() で整数を文字列に変換
   - range キーワードで文字列を効率的に走査
   - switch 文で記憶の状態をスマートに判断
*/

package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	scanner := bufio.NewScanner(os.Stdin)
	scanner.Scan()
	S := scanner.Text()

	count := 0
	for i := 0; i <= 9999; i++ {
		password := fmt.Sprintf("%04d", i)
		if isValidPassword(password, S) {
			count++
		}
	}

	fmt.Println(count)
}

func isValidPassword(password string, memory string) bool {
	for i := 0; i < 10; i++ {
		digit := strconv.Itoa(i)
		contains := false
		for _, c := range password {
			if string(c) == digit {
				contains = true
				break
			}
		}

		switch memory[i] {
		case 'o':
			if !contains {
				return false
			}
		case 'x':
			if contains {
				return false
			}
		}
	}
	return true
}
