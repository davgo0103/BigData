args <- commandArgs(TRUE)

age <- as.numeric(args[1])
anaemia <- as.numeric(args[2])
creatinine_phosphokinase <- as.numeric(args[3])
diabetes <- as.numeric(args[4])
ejection_fraction <- as.numeric(args[5])
high_blood_pressure <- as.numeric(args[6])
platelets <- as.numeric(args[7])
serum_creatinine <- as.numeric(args[8])
serum_sodium <- as.numeric(args[9])
sex <- as.numeric(args[10])
smoking <- as.numeric(args[11])
time <- as.numeric(args[12])

# 載入 SVM 模型
library("e1071", lib.loc = "C:/Users/小蔡/AppData/Local/R/win-library/4.3")
load("test-svm.RData", .GlobalEnv)

# 創建包含輸入值的 data.frame
new_sample <- data.frame(
  age = age,
  anaemia = anaemia,
  creatinine_phosphokinase = creatinine_phosphokinase,
  diabetes = diabetes,
  ejection_fraction = ejection_fraction,
  high_blood_pressure = high_blood_pressure,
  platelets = platelets,
  serum_creatinine = serum_creatinine,
  serum_sodium = serum_sodium,
  sex = sex,
  smoking = smoking,
  time = time
)

# 進行預測
svm.pred <- predict(svm.model, new_sample)
ans <- as.vector(svm.pred)

# 顯示預測結果和輸入參數
cat(ans, "\n")

cat("輸入參數：\n")
cat(paste("年齡 =", age), "\n")
cat(paste("貧血 =", anaemia), "\n")
cat(paste("肌酸磷激酶 =", creatinine_phosphokinase), "\n")
cat(paste("糖尿病 =", diabetes), "\n")
cat(paste("射血分數 =", ejection_fraction), "\n")
cat(paste("高血壓 =", high_blood_pressure), "\n")
cat(paste("血小板數 =", platelets), "\n")
cat(paste("血清肌酸酐 =", serum_creatinine), "\n")
cat(paste("血清鈉 =", serum_sodium), "\n")
cat(paste("性別 =", sex), "\n")
cat(paste("吸菸 =", smoking), "\n")
cat(paste("時間 =", time), "\n")

# 在命令列模式下不需要關閉繪圖設備，因此註解掉 dev.off()
dev.off()
