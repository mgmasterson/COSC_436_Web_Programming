<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <!--
  Michael Masterson
  E00942993
  April 11, 2017
  Susan Haynes
  COSC 436
  db2.emich.edu/~mmaster8/040617
  -->
  <xsl:template match="/">
    <html>
      <body>
        <h3><b><center>Lucha!</center></b></h3>
        <table border="1">
          <tr bgcolor="#9acd32">
            <th>Title</th>
            <th>Article</th>
          </tr>
          <xsl:for-each select="NEWSPAPER/ARTICLE">
            <tr>
              <td><xsl:value-of select="HEADLINE"/></td>
              <td><xsl:value-of select="BODY"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>