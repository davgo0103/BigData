# 載入e1071套件
library(e1071)

# 載入模型
load("C:/xampp/htdocs/big/test-svm.RData")


#82	1	379	0	50	0	47000	1.3	136	1	0	13
#46	0	719	0	40	1	263358.03	1.18	137	0	0	107


new_sample <- data.frame(
  age = 46,
  anaemia = 0,
  creatinine_phosphokinase = 719,
  diabetes = 0,
  ejection_fraction = 40,
  high_blood_pressure = 1,
  platelets = 263358,
  serum_creatinine = 1.18,
  serum_sodium = 137,
  sex = 0,
  smoking = 0,
  time = 107
)

# 進行預測
prediction <- predict(svm.model, new_sample)
ans <- as.vector(prediction)
# 顯示預測結果
cat("預測結果：", ans, "\n")

